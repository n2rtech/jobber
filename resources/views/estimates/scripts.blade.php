    {{-- Page Load Scripts --}}
    <script>
        $(document).ready(function () {
            shippingAddressOptions();
            $("#name").focus();
        });
    </script>

    {{-- Define Global variable --}}
    <script>
        var item_row = 1;
    </script>

    {{-- Load Select 2 Script --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- Load Tiny MCE Script --}}
    <script src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
    <script>
    tinymce.init({
      selector: 'textarea#conditions',
      height: 200,
      menubar: false,
      toolbar: 'undo redo | formatselect | ' +
      'bold italic backcolor | alignleft aligncenter ' +
      'alignright alignjustify | bullist numlist outdent indent | ' +
      'removeformat | help',
      content_style: 'body { font-family:roboto; font-size:16px }'
    });

    tinymce.init({
      selector: 'textarea#notes',
      height: 200,
      menubar: false,
      toolbar: 'undo redo | formatselect | ' +
      'bold italic backcolor | alignleft aligncenter ' +
      'alignright alignjustify | bullist numlist outdent indent | ' +
      'removeformat | help',
      content_style: 'body { font-family:roboto; font-size:16px }'
    });
    </script>

    {{-- Shipping Address Products --}}
    <script>
        function shippingAddressOptions(){
            if($("#same_as_billing_address").is(':checked')){
                $('#shipping_address_div').css('display', 'none');
            }else{
                $('#shipping_address_div').css('display', 'block');
            }
        }
    </script>
    {{-- Date Picker --}}
    <script>
        $('#expiry_date').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $('#estimate_date').datetimepicker({
        format: 'YYYY-MM-DD'
        });
    </script>

    {{-- Set Due Date --}}
    <script>
        function setDueDate(value){
            var date            = new Date();
            date.setDate(date.getDate() + parseInt(value));
            var dateformatted = format(date);
            $('#expiry_date_input').val(dateformatted);
        }
    </script>

    {{--Format Date --}}
    <script>
        function format(inputDate) {
        let date, month, year;

        date = inputDate.getDate();
        month = inputDate.getMonth() + 1;
        year = inputDate.getFullYear();

            date = date
                .toString()
                .padStart(2, '0');

            month = month
                .toString()
                .padStart(2, '0');

        return `${year}-${month}-${date}`;
        }

    </script>

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
            $('#billing_address').text(repo.address);
            $('#phone').text(repo.phone);
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
                html += '<select name="product[' + item_row +'][product]" id="product' + item_row +'" class="form-control form-control-sm" onfocusout="productFocusOut(' + item_row +')" onchange="showProductOptions(this, ' + item_row +')" style="display: none">';
                html += '<option value="">Select Product</option>';
                html += '@foreach ($products as $product)';
                html += '<option value="{{ $product->id }}" data-unitprice="{{ $product->unit_price }}" data-description="{{ $product->description }}" data-tax="{{ $product->tax->rate }}">{{ $product->name }}</option>';
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
                html += '<p class="text-small text-right" id="text-total' + item_row +'" onclick="editTotal(' + item_row +')">0.00</p>';
                html += '<input type="number" class="form-control form-control-sm text-align-right totalpriceinput" id="total' + item_row +'" name="product[' + item_row +'][total]" placeholder="Total" min="0" step="any" onfocusout="totalFocusOut(' + item_row +')" value="0.00" style="display: none">';
                html += '<input type="hidden" id="tax_rate' + item_row +'" name="product[' + item_row + '][tax_rate]" value="0"><input type="hidden" class="tax_amount" id="tax_amount' + item_row +'" value="0">';
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

            $('#text-quantity'+row).text(quantity);

            $('#text-unit'+row).text(unitprice);

            var quantity     = $("#quantity" + row).val();

            var subtotal     = (Math.round(quantity * 100) / 100).toFixed(2) * (Math.round(unitprice * 100) / 100).toFixed(2);

            var total        = subtotal

            var tax_amount   = (subtotal * tax / 100)

            $('#text-total'+row).text(total);

            $('#tax_amount'+row).val(tax_amount);

            $('#total'      + row).val((Math.round(total * 100) / 100).toFixed(2));

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
            var subtotal    = (Math.round(quantity * 100) / 100).toFixed(2) * (Math.round(unitprice * 100) / 100).toFixed(2);
            var total       = subtotal;
            var tax_amount   = (subtotal * tax / 100);
            $('#tax_amount'+row).val(tax_amount);
            $('#total'      + row).val((Math.round(total * 100) / 100).toFixed(2));
            $('#text-total'+row).text(total);
        }
    </script>

    {{-- Update Subtotal of Products --}}
    <script>
        setInterval(function(){
            var sum              = 0;
            var total_amount_payable = 0;
            var tax_amount       = 0;
            var deduct_discount  = 0;
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

            switch (discount_type) {
                case 'percentage':
                    var deduct_discount = sum_round * parseFloat(discount) / 100;
                        $('#discount_amount').text(sum_round * parseFloat(discount) / 100);
                    break;

                case 'amount':
                    var deduct_discount = parseFloat(discount);
                        $('#discount_amount').text((Math.round(discount * 100) / 100).toFixed(2));
                    break;

                default:
                    var deduct_discount = sum_round * parseFloat(discount) / 100;
                    $('#discount_amount').text(sum_round * parseFloat(discount) / 100);
                    break;
            }

            var total_amount_payable = (sum + tax_amount - deduct_discount)
            $('#total').text((Math.round(total_amount_payable * 100) / 100).toFixed(2));
            $('#estimate_total').val((Math.round(total_amount_payable * 100) / 100).toFixed(2));

        }, 500);
    </script>
    @isset($customer)
    {{-- Set Default Customer --}}
        <script>
            $(document).ready(function () {
                $("#select2-name-container").text("{{ $customer->name }}");
                $("#customer_id").val("{{ $customer->id }}");
            });
        </script>
     @endisset

     @isset($estimate)
    {{-- Set Default Customer --}}
        <script>
            $(document).ready(function () {
                $("#select2-name-container").text("{{ $estimate->customer->name }}");
                $("#customer_id").val("{{ $estimate->customer_id }}");
            });
        </script>
     @endisset
