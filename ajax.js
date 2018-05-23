function getXMLHttpRequest() {
    let yolo;
    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) {
            try {
                yolo = new ActiveXObject("Msxm12.XMLHTTP");
            }
            catch (e) {
                yolo = new ActiveXObject("Microsoft.XMLHTTP");
            }
        }
        else {
            yolo = new XMLHttpRequest();
        }
        return yolo;
    }
    else {
        alert("Môrche pô");
        return false;
    }
}