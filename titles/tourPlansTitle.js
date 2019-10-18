var obj, dbParam, xmlhttp, x, txt = "";
var i = 0;
var otherPlaces = [];
obj = {
    "table": "tourplan"
};
dbParam = JSON.stringify(obj);
xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        //document.getElementById("demo").innerHTML = "All data: " + this.responseText;
        var myObj = JSON.parse(this.responseText);
        for (x in myObj) {
            txt += myObj[x].title + " ";
            i++;
            otherPlaces.push(myObj[x].title);
            otherPlaces.push(myObj[x].type);
        }
        console.log(otherPlaces);
        console.log(i);

        $("#search-loged").autocomplete({
            source: otherPlaces,
            select: function (event, ui) {
                var search = $('#search-loged').val();
                console.log(search);
                console.log('abu');
                $('#form').submit();
            }
        });
    }
};
xhr.open("GET", "title/tourTitle.php?x=" + dbParam); //, true
console.log('OPENED: ', xhr.status);
xhr.send();