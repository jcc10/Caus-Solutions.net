function RegEx0001Test() {
	var regex = /((?:(?:(?:[0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9])(?:\s|)(?:am|pm|AM|PM|)(?:(?:\s|)- |))+)/gi; 
	var input = document.forms["RegEx0001Form"]["TestInput"].value;; 
	if(regex.test(input)) {
		var matches = input.match(regex);
		alert("This found: " + matches[1]);
	} else {
		alert("You Input: \'" + input + "\'"\nNo matches found!");
	}
}