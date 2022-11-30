<script>

    function editProduct(row){
        $('#text-product'+row).css('display', 'none');
        $('#product'+row).css('display', 'block');
        $('#product'+row).focus();
    }

    function productFocusOut(row){
        $('#text-product'+row).css('display', 'block');
        $('#product'+row).css('display', 'none');
    }

    function editDescription(row){
        $('#text-description'+row).css('display', 'none');
        $('#description'+row).css('display', 'block');
        $('#description'+row).focus();
    }


    function descriptionFocusOut(row){
        $('#text-description'+row).css('display', 'block');
        $('#description'+row).css('display', 'none');
    }

    function editQuantity(row){
        $('#text-quantity'+row).css('display', 'none');
        $('#quantity'+row).css('display', 'block');
        $('#quantity'+row).focus();
    }

    function quantityFocusOut(row){
        $('#quantity'+row).css('display', 'none');
        $('#text-quantity'+row).css('display', 'block');
    }

    function editUnitPrice(row){
        $('#text-unit'+row).css('display', 'none');
        $('#unit_price'+row).css('display', 'block');
        $('#unit_price'+row).focus();
    }

    function unitFocusOut(row){
        $('#unit_price'+row).css('display', 'none');
        $('#text-unit'+row).css('display', 'block');
    }

    function editTotal(row){
        $('#text-total'+row).css('display', 'none');
        $('#total'+row).css('display', 'block');
        $('#total'+row).focus();
    }

    function totalFocusOut(row){
        $('#text-total'+row).css('display', 'block');
        $('#total'+row).css('display', 'none');
    }

</script>
