function validateForm() 
{
    if (document.forms["myForm"]["name"].value == "") 
    {
        alert("Please Enter Cardholder's name.");
        return false;
    }
	
	if (!/^[a-zA-Z\s]*$/g.test(document.myForm.name.value)) {
        alert("Invalid characters. Name can contain only Letters.");
        return false;
    }
	
	if (!/^[0-9]*$/g.test(document.myForm.card.value)) {
        alert("Invalid characters. Card Number can contain only Digits[0-9].");
        return false;
    }
	
    if (document.forms["myForm"]["card"].value.length != 16)
    {
        alert("Card Number must be of 16 digits.");
        return false;
    }
	
	if (document.forms["myForm"]["valid"].value == "") 
    {
        alert("Please Enter Month/Year.");
        return false;
    }

	if (document.forms["myForm"]["cvv"].value.length != 3)
    {
        alert("CVV must be of 3 digits.");
        return false;
    }
}