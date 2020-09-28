function my_template(id, data) {
    var str = document.querySelector('#' + id).innerHTML;
    var reg = /{{(\w+)}}/;
    var reultStr = reg.exec(str);
    while (reultStr) {
        str = str.replace(reultStr[0], data[reultStr[1]]);
        reultStr = reg.exec(str);
    }
    return str
}