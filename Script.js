
document.addEventListener("DOMContentLoaded", function () {
    const selects = document.querySelectorAll("select");

    selects.forEach(select => {
        select.dataset.previous = select.value;

        select.addEventListener("change", () => {
            updateOptions();
        });
    });
    function updateOptions() {
        const selectedValues = Array.from(selects)
            .map(select => select.value)
            .filter(val => val !== "" && val !== "Select a subject");

        selects.forEach(currentSelect => {
            const currentValue = currentSelect.value;

            Array.from(currentSelect.options).forEach(opt => {
                opt.hidden = false;
            });

            selectedValues.forEach(value => {
                Array.from(currentSelect.options).forEach(opt => {
                    if (opt.value === value && opt.value !== currentValue) {
                        opt.hidden = true;
                    }
                });
            });
        });
    }


    updateOptions();
});
