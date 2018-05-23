function getXMLHttpRequest() {
    let yoloAjax;
    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) {
            try {
                yoloAjax = new ActiveXObject("Msxm12.XMLHTTP");
            }
            catch (e) {
                yoloAjax = new ActiveXObject("Microsoft.XMLHTTP");
            }
        }
        else {
            yoloAjax = new XMLHttpRequest();
        }
        return yoloAjax;
    }
    else {
        alert("Môrche pô");
        return false;
    }
}