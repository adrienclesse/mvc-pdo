let questions = [];

for(i=1; i < 6; i++){
    questions.push(document.getElementById("question" + i));
}

for(i=1; i < questions.length; i++){
    questions[i].style.display = "none";
}


toggleQuestions = (i) =>{
    questions[i-1].style.display = "none"
    questions[i].style.display = "block";
}
