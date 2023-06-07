<script>
    const selectPropietarioRemolque = document.getElementById('selectPropietarioRemolque');
    const selectTipoRemolque = document.getElementById('selectTipoRemolque')

    selectPropietarioRemolque.addEventListener('change', function (evt) {
        let propietario_tipos_remolque_id = this.options[this.selectedIndex].dataset.tiposRemolque.split(',');

        selectTipoRemolque.selectedIndex = 0;

        for(let i = 1; i < selectTipoRemolque.options.length; i++)
        {
            let option = selectTipoRemolque.options[i]

            option.classList.add('d-none')

            if( propietario_tipos_remolque_id.includes(option.value) )
                option.classList.remove('d-none')
        }
    })
</script>
