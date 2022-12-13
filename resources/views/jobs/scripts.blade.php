    {{-- Page Load Scripts --}}
    <script>
        $(document).ready(function () {
            $("#name").focus();
        });
    </script>

    {{-- Define Global variable --}}
    @isset($job)
        <script>
            var item_row = {{ count($job->products) }};
        </script>
    @else
        <script>
            var item_row = 1;
        </script>
    @endisset


    {{-- Load Select 2 Script --}}

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- Autocomplete Customer Field --}}
    <script>
        $("#name").select2({
            theme: 'bootstrap4',
            ajax: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('customers.autocomplete') }}",
                method: "POST",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            placeholder: 'Search for a Customer',
            minimumInputLength: 3,
            templateResult: formatRepo,
            templateSelection: formatRepoSelection
        });

        function formatRepo(repo) {
            if (repo.loading) {
                return repo.text;
            }

            var $container = $(
                "<div class='select2-result-repository clearfix'>" +
                "<div class='select2-result-repository__title' style='font-size:14px'><i class='fa fa-user' style='font-size:13px'></i>  </div>" +
                "<div class='select2-result-repository__forks' style='font-size:13px'><i class='fa fa-house' style='font-size:12px'></i>  </div>" +
                "<div class='select2-result-repository__stargazers' style='font-size:13px'><i class='fa fa-phone' style='font-size:12px'></i>  </div>" +
                "<div class='select2-result-repository__watchers' style='font-size:13px'><i class='fa fa-envelope' style='font-size:12px'></i>  </div>" +
                "</div>" +
                "</div>" +
                "</div>"
            );

            $container.find(".select2-result-repository__title").append(repo.name);
            $container.find(".select2-result-repository__forks").append(repo.address);
            $container.find(".select2-result-repository__stargazers").append(repo.phone);
            $container.find(".select2-result-repository__watchers").append(repo.email);

            return $container;
        }

        function formatRepoSelection(repo) {
            $('#customer_id').val(repo.id);
            $('#address').val(repo.address);
            return repo.name;
        }
    </script>

    {{-- Add Line items --}}
    <script>
        function addLineItem() {
            if (item_row < 50) {
                html = '<tr id="item-row' + item_row + '">';
                html += '<td>';
                html += '<p class="text-small" id="text-product' + item_row +'" onclick="editProduct(' + item_row +')">Select Product</p>';
                html += '<select name="product[' + item_row +'][product]" id="product' + item_row +'" class="form-control form-control-sm select2" onfocusout="productFocusOut(' + item_row +')" onchange="showProductOptions(this, ' + item_row +')" style="display: none">';
                html += '<option value="">Select Product</option>';
                html += '@foreach ($products as $product)';
                html += '<option value="{{ $product->id }}" data-unitprice="{{ $product->unit_price }}" data-description="{{ trim(preg_replace('/\s\s+/', ' ', $product->description)) }}" data-tax="{{ $product->tax->rate }}">{{ $product->name }}</option>';
                html += '@endforeach';
                html += '</select>';
                html += '<p class="text-small" id="text-description' + item_row +'" onclick="editDescription(' + item_row +')">Product Description</p>';
                html += '<textarea name="product[' + item_row +'][description]" id="description' + item_row +'" rows="2" placeholder="Description" class="form-control form-control-sm mt-1" style="display: none" onfocusout="descriptionFocusOut(' + item_row +')"></textarea>';
                html += '</td>';
                html += '<td>';
                html += '<p class="text-small text-right" id="text-quantity' + item_row +'" onclick="editQuantity(' + item_row +')">1</p>';
                html += '<input type="number" class="form-control form-control-sm text-align-right" id="quantity' + item_row +'" name="product[' + item_row +'][quantity]" placeholder="Quantity" onfocusout="quantityFocusOut(' + item_row +')" oninput="totalUpdate(' + item_row +')" min="1" value="1" style="display: none;">';
                html += '</td>';
                html += '<td>';
                html += '<p class="text-small text-right" id="text-unit' + item_row +'" onclick="editUnitPrice(' + item_row +')">0.00</p>';
                html += '<input type="number" class="form-control form-control-sm text-align-right" id="unit_price' + item_row +'" name="product[' + item_row +'][unit_price]" placeholder="Unit Price" min="0" step="any" onfocusout="unitFocusOut(' + item_row +')" oninput="totalUpdate(' + item_row +')" value="0.00" style="display: none">';
                html += '</td>';
                html += '<td>';
                html += '<p class="text-small text-right" id="text-tax' + item_row + '" onclick="editTax(' + item_row + ')">Tax</p>';
                html += '<select name="product[' + item_row + '][tax_rate]" id="tax_rate' + item_row + '" class="form-control form-control-sm product" onfocusout="taxFocusOut(' + item_row + ')" onchange="totalUpdate(' + item_row + ')" style="display: none">';
                html += '<option value="">Select Tax</option>';
                html += '@foreach ($tax_rates as $rate)';
                html += '<option value="{{ $rate->rate }}">{{ $rate->name }}</option>';
                html += '@endforeach';
                html += '</select>';
                html += '</td>';
                html += '<td>';
                html += '<p class="text-small text-right" id="text-total' + item_row +'" onclick="editTotal(' + item_row +')">0.00</p>';
                html += '<input type="number" class="form-control form-control-sm text-align-right totalpriceinput" id="total' + item_row +'" name="product[' + item_row +'][total]" placeholder="Total" min="0" step="any" onfocusout="totalFocusOut(' + item_row +')" value="0.00" style="display: none">';
                html += '<input type="hidden" class="tax_amount" id="tax_amount' + item_row +'" value="0">';
                html += '</td>';
                html +='<td class="text-right"><button type="button" class="btn btn-sm btn-danger" onclick="$(\'#item-row' + item_row +'\').remove();"><i class="fa fa-minus"></i></button></td>';
                html += '</tr>';

                $('#line_items tbody').append(html);

                item_row++;
            }
        }
    </script>

     {{-- Show Product Options --}}
    <script>

        function showProductOptions(element, row){

            var product      = $(element).find(':selected').text();

            var unitprice    = $(element).find(':selected').data('unitprice');

            var description  = $(element).find(':selected').data('description');

            var tax          = $(element).find(':selected').data('tax');

            $("#tax_rate" + row).val(tax);

            $("#unit_price"  + row).val(unitprice);

            $("#description" + row).val(description);

            $('#text-product'+row).text(product);

            $('#text-description'+row).text(description);

            $('#text-quantity'+row).text(quantity);

            $('#text-tax'+row).text(tax+'%');

            $('#text-unit'+row).text(unitprice);

            var quantity     = $("#quantity" + row).val();

            var subtotal     = parseInt(quantity) * parseFloat(unitprice);

            var total        = parseFloat(subtotal).toFixed(2);

            var tax_amount   = (subtotal * tax / 100)

            $('#text-total'+row).text(total);

            $('#tax_amount'+row).val(tax_amount);

            $('#total'      + row).val(total);

            productFocusOut(row);
        }
    </script>

    {{-- Update Product Total By Quantity --}}
    <script>
        function totalUpdate(row){
            var quantity    = $("#quantity"+row).val();
            $('#text-quantity'+row).text(quantity);
            var unitprice   = $("#unit_price"+row).val();
            $('#text-unit'+row).text(unitprice);
            var tax         = $("#tax_rate"+row).val();
            $('#text-tax'+row).text(tax+'%');
            var subtotal     = parseInt(quantity) * parseFloat(unitprice);
            var total        = parseFloat(subtotal).toFixed(2);
            var tax_amount   = (subtotal * tax / 100);
            $('#tax_amount'+row).val(tax_amount);
            $('#total'      + row).val(total);
            $('#text-total'+row).text(total);
        }
    </script>

    {{-- Update Subtotal of Products --}}
    <script>
        setInterval(function(){
            var sum              = 0;
            var total_amount_payable = 0;
            var tax_amount       = 0;
            var tax_round        = 0;
            var total_after_tax  = 0;
            var perentage        = 0;
            var percentage_round = 0;
            var sum_round        = 0;
            var discount_type    = $('#discount_type').val();
            var discount         = $('#discount').val();



            $('.totalpriceinput').each(function() {
                sum += parseFloat($(this).val());
            });

            $('.tax_amount').each(function() {
                tax_amount += parseFloat($(this).val());
            });

            var sum_round        = (Math.round(sum * 100) / 100).toFixed(2);
            var tax_round        = (Math.round(tax_amount * 100) / 100).toFixed(2);
            var total_after_tax  = (parseFloat(sum_round) + parseFloat(tax_round));
            var perentage        = (tax_round * 100) / sum_round;
            var percentage_round =  (Math.round(perentage * 100) / 100).toFixed(1);

            $('#tax_type').val('percentage');
            $('#tax').val(percentage_round);
            $('#tax_amount').text(tax_round);

            $('#subtotal').text(sum_round);

            var total_amount_payable = (sum + tax_amount)
            $('#totals').text((Math.round(total_amount_payable * 100) / 100).toFixed(2));

        }, 500);
    </script>
    @isset($customer)
    {{-- Set Default Customer --}}
        <script>
            $(document).ready(function () {
                $("#select2-name-container").text("{{ $customer->name }}");
                $("#customer_id").val("{{ $customer->id }}");
                $("#address").val('{{ getCustomerAddress(Request::get('customer_id')) }}');
            });
        </script>
     @endisset

     @isset($job)
    {{-- Set Default Customer --}}
        <script>
            $(document).ready(function () {
                $("#select2-name-container").text("{{ $job->customer->name }}");
                $("#customer_id").val("{{ $job->customer_id }}");
                $('#address').val("{{ getCustomerAddress($job->customer_id) }}");
            });
        </script>
     @endisset
