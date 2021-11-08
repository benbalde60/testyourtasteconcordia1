function quantityUp() {
    var q = parseInt(this.parentNode.querySelector(".quantity").value);
    q = q + 1;
    this.parentNode.querySelector(".quantity").value = q;
    processedSum();
}

function quantityDown() {
    var q = parseInt(this.parentNode.querySelector(".quantity").value);
    if (q > 0) {
        q = q - 1;
        this.parentNode.querySelector(".quantity").value = q;
    }
    processedSum();
}
