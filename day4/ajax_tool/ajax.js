function ajax(obj) {
    var xhr = new XMLHttpRequest();
    if (obj.type == 'get' && obj.data) {
        obj.url += '?';
        obj.url += obj.data;
        obj.data = null;
    }
    xhr.open(obj.type, obj.url);
    if (obj.type == 'post' && obj.data) {
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    }
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // console.log(xhr.responseText);
            var reph = xhr.getResponseHeader('Content-Type');
            if (reph.indexOf('xml') != -1) {
                obj.success(xhr.responseXML)
            } else if (reph.indexOf('json') != -1) {
                obj.success(JSON.parse(xhr.responseText))
            } else {
                obj.success(xhr.responseText)
            }
        }
    }
    xhr.send(obj.data);
}