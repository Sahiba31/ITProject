function validateForm() 
{
    if (document.forms["myForm"]["title"].value == "") 
    {
        alert("Please Enter Product Name.");
        return false;
    }
	
	if (document.forms["myForm"]["pur_year"].value == "") 
    {
        alert("Please Enter Purchased Year.");
        return false;
    }
	
	if (!/^[0-9]*$/g.test(document.myForm.pur_year.value)) {
        alert("Please Enter Year in number only.");
        return false;
    }
	
	if (document.forms["myForm"]["pur_year"].value.length != 4)
    {
        alert("Year must be of 4 digits.");
        return false;
    }
	
	if (document.forms["myForm"]["price"].value == "") 
    {
        alert("Please Enter the Price.");
        return false;
    }
	
	if (!/^[0-9]*$/g.test(document.myForm.price.value)) {
        alert("Please Enter Price in number only.");
        return false;
    }
	
	if (document.forms["myForm"]["contact"].value == "") 
    {
        alert("Contact Number cannot be Empty.");
        return false;
    }
    if (!/^[0-9]*$/g.test(document.myForm.contact.value)) {
        alert("Invalid characters. Contact Number can contain only Digits[0-9].");
        return false;
    }
    if (document.forms["myForm"]["contact"].value.length != 10)
    {
        alert("Number must be of 10 digits.");
        return false;
    }
	
	
}