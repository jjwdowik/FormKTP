function checkEmail(theForm){
	if (theForm.email.value != theForm.verifyEmail.value) {
		alert('Those emails don\'t match!');
		return false;
	}
	else{
		alert("You did it!");
		return true;
	}
}

