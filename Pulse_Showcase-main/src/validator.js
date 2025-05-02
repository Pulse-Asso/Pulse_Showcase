<script>
    document.querySelector('form').addEventListener('submit', function (event) {
        let isValid = true;
        const itemNames = document.getElementsByName('item_name[]');
        const quantities = document.getElementsByName('quantity[]');
        const prices = document.getElementsByName('price[]');

        itemNames.forEach((item, index) => {
            if (item.value.trim() === "" || quantities[index].value <= 0 || prices[index].value <= 0) {
                alert('Tous les champs doivent être remplis correctement.');
                isValid = false;
            }
        });

        if (!isValid) {
            event.preventDefault();
        }
    });
</script>
