$(document).ready(function() {
    function _x(STR_XPATH) {
        var xresult = document.evaluate(STR_XPATH, document, null, XPathResult.ANY_TYPE, null);
        var xnodes = [];
        var xres;
        while (xres = xresult.iterateNext()) {
            xnodes.push(xres);
        }
        return xnodes;
    }
    $(_x('//*[@id="page-actions"]/a')).css({ 'color': 'yellow', 'border': '3px solid red' });
    $(_x('//*[@class="main"]/h1/a')).css({ 'color': 'green', 'border': '3px solid red' });
    $(_x('/html/body/div/div/p[1]')).css({ 'color': 'green', 'border': '3px solid red' });
    $(_x('//table[@id="tableOfFruits"]//tr[@class="title"]/td')).css({ 'color': 'green', 'border': '3px solid red' });
    $(_x('//*//tr[@class="heading"]/td')).css({ 'color': 'green', 'border': '3px solid red' });
    $(_x('/html/body/div/table/tbody/tr[2]/td[1]')).css({ 'color': 'green', 'background-color': 'red' });
    $(_x('//*[@id="tableOfFruits"]/tbody/tr[4]/td[1]')).css({ 'color': 'green', 'background-color': 'red' });
    $(_x('//*/tbody/tr[6]/td[1]')).css({ 'color': 'green', 'background-color': 'red' });
    $(_x('/html/body/div/table/tbody/tr[8]/td[1]/table/tbody/tr/td')).css({ 'color': 'green', 'border': '3px solid red' });
    $(_x('/html/body/div/table/tbody/tr[10]/td[1]')).css({ 'color': 'green', 'border': '3px solid red' });
});