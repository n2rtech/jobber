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

            // var tax          = $(element).find(':selected').data('tax');

            $("#unit_price"  + row).val(unitprice);

            $("#description" + row).val(description);

            // $("#tax_rate" + row).val(tax);

            $('#text-product'+row).text(product);

            $('#text-description'+row).text(description);

            $('#text-quantity'+row).text(quantity);

            $('#text-quantity'+row).text(quantity);

            $('#text-unit'+row).text(unitprice);

            var quantity     = $("#quantity" + row).val();

            var subtotal     = (Math.round(quantity * 100) / 100).toFixed(2) * (Math.round(unitprice * 100) / 100).toFixed(2);

            var total        = subtotal

            // var total     = (subtotal + subtotal * tax / 100)

            $('#text-total'+row).text(total);

            $('#total'      + row).val((Math.round(total * 100) / 100).toFixed(2));
        }
    </script>

    {{-- Update Product Total By Quantity --}}
    <script>
        function totalUpdate(row){
            var quantity    = $("#quantity"+row).val();
            var unitprice   = $("#unit_price"+row).val();
            var tax         = $("#tax_rate"+row).val();
            var subtotal    = (Math.round(quantity * 100) / 100).toFixed(2) * (Math.round(unitprice * 100) / 100).toFixed(2);
            var total       = subtotal;
            // var total    = (subtotal + subtotal * tax / 100)
            $('#total'      + row).val((Math.round(total * 100) / 100).toFixed(2));
        }
    </script>
