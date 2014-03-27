function checkEmail(theForm){
	alert("You did it!");
	if (theForm.email.value != theForm.verifyEmail.value) {
		alert('Those emails don\'t match!');
		return false;
	}
	else{
		return true;
	}
}

