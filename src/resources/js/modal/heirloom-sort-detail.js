/** ソート条件をリセットする **/
function resetSort() {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach((checkbox) => {
        checkbox.checked = false;
    });
    const toggleOrRadios = document.querySelectorAll(
        'input[type="radio"][value="or"]',
    );
    toggleOrRadios.forEach((radio) => {
        radio.checked = true;
    });
    const toggleAndRadios = document.querySelectorAll(
        'input[type="radio"][value="and"]',
    );
    toggleAndRadios.forEach((radio) => {
        radio.checked = false;
    });
}

window.resetSort = resetSort;
