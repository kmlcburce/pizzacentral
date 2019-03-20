var cart=[];
var item= function(name,price,count){
	this.name=name
	this.price=price
	this.count=count
}

function addCart(name,price){
	var a = new item(name,price,1)
	cart.push(name);
	sum += price;
}














var text,cart,sum;
cart=["hat"]
	text = "<ul>";
	cart.forEach(update);
	text += "</ul>";
	text += "<p>";
	text += sum;
	text += "</p>";
	document.getElementById("sCart").innerHTML = text;







function update(value){
	text+="<li>"+value+"</li>"

}
var fruits, text;
fruits = ["Banana", "Orange", "Apple"];

text = "<ul>";
fruits.forEach(myFunction);
text += "</ul>";
document.getElementById("demo").innerHTML = text;

function myFunction(value) {
  text += "<li>" + value + "</li>";