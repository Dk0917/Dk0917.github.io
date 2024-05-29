// 각 메뉴에 가격할당
var coffee_prices = new Array;
coffee_prices["amrcn"] = 4000;
coffee_prices["cflt"] = 5000;
coffee_prices["cpcn"] = 5000;
coffee_prices["dclt"] = 5500;
coffee_prices["mt"] = 4000;
coffee_prices["gt"] = 4500;
coffee_prices["at"] = 4500;
coffee_prices["mb"] = 5000;
coffee_prices["mbb"] = 5500;
coffee_prices["dlb"] = 5500;

//값을 더해주고 출력하는 함수
function calculateTotal() {
    var selectedcoffee = document.getElementsByName("selectedcoffee");
    var coffeePrice = 0;

    for (var i = 0; i < selectedcoffee.length; i++) 
    {
        if (selectedcoffee[i].checked) {
            coffeePrice += coffee_prices[selectedcoffee[i].value];
        }
    }

    var divobj = document.getElementById('totalPrice');
    divobj.style.display = 'block';
    divobj.innerHTML = "커피 총 가격은 " + coffeePrice + "원";
}


function hideTotal() {
    var divobj = document.getElementById('totalPrice');
    divobj.style.display = 'none';
}

    
    
