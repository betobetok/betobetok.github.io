function drawComunications(){
	var canvas = document.getElementById("SoftSkills");
	var ctx = canvas.getContext("2d");
	ctx.clearRect(0,0,canvas.width,canvas.height);
	ctx.font = "35px Comic Sans MS";
	ctx.fillStyle = "red";
	ctx.textAlign = "left";
	ctx.fillText("Listening", 50, 80);
	ctx.font = "15px Comic Sans MS";
	ctx.fillStyle = "blue";
	ctx.textAlign = "left";
	ctx.fillText("Negotiation", 50, 100);
	ctx.translate(30,10);
	ctx.rotate(90 * Math.PI / 180);
	ctx.font = "16px Comic Sans MS";
	ctx.fillStyle = "green";
	ctx.textAlign = "left";
	ctx.fillText("Nonverbal communication", 0, 0);
	ctx.font = "12px Comic Sans MS";
	ctx.fillStyle = "orange";
	ctx.textAlign = "left";
	ctx.fillText("Persuasion", 0, 22);
	ctx.translate(30,-20);
	ctx.rotate(270 * Math.PI / 180);
	ctx.font = "33px Comic Sans MS";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Presentation", 0, 0);
	ctx.font = "40px Comic Sans MS";
	ctx.fillStyle = "grey";
	ctx.textAlign = "left";
	ctx.fillText("Public speaking", 0, 100);
	ctx.font = "15px Comic Sans MS";
	ctx.fillStyle = "green";
	ctx.textAlign = "left";
	ctx.fillText("Reading body language", 100, 65);
	ctx.translate(0,0);
	ctx.rotate(90 * Math.PI / 180)
	ctx.font = "11px Comic Sans MS";
	ctx.fillStyle = "red";
	ctx.textAlign = "left";
	ctx.fillText("Storytelling", 80, 40);
	ctx.translate(0,0);
	ctx.rotate(270 * Math.PI / 180)
	ctx.font = "bold 30px serif";
	ctx.fillStyle = "orange";
	ctx.textAlign = "left";
	ctx.fillText("Verbal communication", 20, 140);
	ctx.translate(100,0);
	ctx.rotate(45 * Math.PI / 180)
	ctx.font = "13px Comic Sans MS";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Visual communication", 90, -90);
	ctx.font = "bold 12px serif";
	ctx.fillStyle = "grey";
	ctx.textAlign = "left";
	ctx.fillText("Writing skills", 130, -130);
	ctx.setTransform(1, 0, 0, 1, 0, 0);
}

function drawCrit(){
	var canvas = document.getElementById("SoftSkills");
	var ctx = canvas.getContext("2d");
	var x=30;
	ctx.clearRect(0,0,canvas.width,canvas.height);
	ctx.translate(1,200);
	ctx.rotate(270 * Math.PI / 180);
	ctx.fillStyle = "black";
	ctx.fillRect(0, x*0.2, 180, x*0.8);
	ctx.font = "bold 18px serif";
	ctx.fillStyle = "white";
	ctx.textAlign = "left";
	ctx.fillText("Adaptability", 10, 22);
	ctx.translate(0,x);
	ctx.fillStyle = "blue";
	ctx.fillRect(0, x*0.2, 120, x*0.8);
	ctx.font = "bold 12px serif";
	ctx.fillStyle = "white";
	ctx.textAlign = "left";
	ctx.fillText("Critical observation", 10, 21);
	ctx.translate(0,x);
	ctx.fillStyle = "grey";
	ctx.fillRect(0, x*0.2, 100, x*0.8);
	ctx.font = "bold 10px serif";
	ctx.fillStyle = "white";
	ctx.textAlign = "left";
	ctx.fillText("Design aptitude", 10, 20);
	ctx.translate(0,x);
	ctx.fillStyle = "black";
	ctx.fillRect(0, x*0.2, 190, x*0.8);
	ctx.font = "bold 18px serif";
	ctx.fillStyle = "white";
	ctx.textAlign = "left";
	ctx.fillText("Desire to learn", 10, 22);
	ctx.translate(0,x);
	ctx.fillStyle = "blue";
	ctx.fillRect(0, x*0.2, 150, x*0.8);
	ctx.font = "bold 18px serif";
	ctx.fillStyle = "white";
	ctx.textAlign = "left";
	ctx.fillText("Flexibility", 10, 23);
	ctx.translate(0,x);
	ctx.fillStyle = "gray";
	ctx.fillRect(0, x*0.2, 120, x*0.8);
	ctx.font = "bold 18px serif";
	ctx.fillStyle = "white";
	ctx.textAlign = "left";
	ctx.fillText("Innovation", 10, 23);
	ctx.translate(0,x);
	ctx.fillStyle = "black";
	ctx.fillRect(0, x*0.2, 160, x*0.8);
	ctx.font = "bold 15px serif";
	ctx.fillStyle = "white";
	ctx.textAlign = "left";
	ctx.fillText("Logical thinking", 10, 22);
	ctx.translate(0,x);
	ctx.fillStyle = "blue";
	ctx.fillRect(0, x*0.2, 140, x*0.8);
	ctx.font = "bold 16px serif";
	ctx.fillStyle = "white";
	ctx.textAlign = "left";
	ctx.fillText("Problem solving", 10, 23);
	ctx.translate(0,x);
	ctx.fillStyle = "grey";
	ctx.fillRect(0, x*0.2, 170, x*0.8);
	ctx.font = "bold 18px serif";
	ctx.fillStyle = "white";
	ctx.textAlign = "left";
	ctx.fillText("Creativity", 10, 23);
	ctx.translate(0,x);
	ctx.fillStyle = "black";
	ctx.fillRect(0, x*0.2, 100, x*0.8);
	ctx.font = "bold 11px serif";
	ctx.fillStyle = "white";
	ctx.textAlign = "left";
	ctx.fillText("Resourcefulness", 10, 20);
	ctx.translate(0,x);
	ctx.fillStyle = "blue";
	ctx.fillRect(0, x*0.2, 180, x*0.8);
	ctx.font = "bold 12px serif";
	ctx.fillStyle = "white";
	ctx.textAlign = "left";
	ctx.fillText("Thinking outside the box", 10, 21);
	ctx.translate(0,x);
	ctx.fillStyle = "grey";
	ctx.fillRect(0, x*0.2, 130, x*0.8);
	ctx.font = "bold 12px serif";
	ctx.fillStyle = "white";
	ctx.textAlign = "left";
	ctx.fillText("Tolerance of change", 10, 21);
	ctx.translate(0,x);
	ctx.fillStyle = "black";
	ctx.fillRect(0, x*0.2, 140, x*0.8);
	ctx.font = "bold 18px serif";
	ctx.fillStyle = "white";
	ctx.textAlign = "left";
	ctx.fillText("Troubleshooting", 10, 23);
	ctx.setTransform(1, 0, 0, 1, 0, 0);	
}

function drawLead(){
	var canvas = document.getElementById("SoftSkills");
	var ctx = canvas.getContext("2d");
	var x=30;
	ctx.clearRect(0,0,canvas.width,canvas.height);
	ctx.translate(-10,195);
	ctx.rotate(300 * Math.PI / 180);
	ctx.font = "bold 10px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Conflict management", 10, 22);
	ctx.translate(0,x-10);
	ctx.font = "bold 11px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Giving clear feedback", 30, 22);
	ctx.translate(0,x-10);
	ctx.font = "bold 13px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Delegation", 45, 22);
	ctx.translate(0,x-8);
	ctx.font = "bold 15px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Supervising", 62, 22);
	ctx.translate(0,x-5);
	ctx.font = "bold 17px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Mentoring", 80, 22);
	ctx.translate(0,x);
	ctx.font = "bold 19px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Facilitation", 104, 22);
	ctx.translate(0,x);
	ctx.font = "bold 21px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Talent management", 125, 22);
	ctx.translate(0,x);
	ctx.font = "bold 23px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Motivating", 149, 22);
	ctx.translate(0,x);
	ctx.font = "bold 25px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Inspiringpeople", 175, 22);
	ctx.translate(0,x);
	ctx.font = "bold 24px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Decision making", 195, 22);
	ctx.setTransform(1, 0, 0, 1, 0, 0);	
	ctx.translate(10,200);
	ctx.rotate(262 * Math.PI / 180);
	ctx.fillStyle = "black";
	ctx.fillRect(0, 0, 2, 400);
	ctx.translate(2,400);
	ctx.setTransform(1, 0, 0, 1, 0, 0);		
}

function drawPositive(){
	var canvas = document.getElementById("SoftSkills");
	var ctx = canvas.getContext("2d");
	var x=22;
	ctx.clearRect(0,0,canvas.width,canvas.height);
	ctx.translate(0,x-2);
	ctx.font = "bold 15px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Confidence", 0, 0);
	ctx.fillRect(0, 3, 400, 2);
	ctx.scale(0.5, 0.5);
	smileyFace(200,-40,ctx);
	smileyFace(240,-40,ctx);
	smileyFace(280,-40,ctx);
	smileyFace(320,-40,ctx);
	smileyFace(360,-40,ctx);
	smileyFace(400,-40,ctx);
	smileyFace(440,-40,ctx);
	smileyFace(480,-40,ctx);
	ctx.scale(2, 2);
	ctx.translate(0,x);
	ctx.font = "bold 15px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Cooperation", 0, 0);
	ctx.fillRect(0, 3, 400, 2);
	ctx.scale(0.5, 0.5);
	smileyFace(200,-40,ctx);
	smileyFace(240,-40,ctx);
	smileyFace(280,-40,ctx);
	smileyFace(320,-40,ctx);
	smileyFace(360,-40,ctx);
	smileyFace(400,-40,ctx);
	smileyFace(440,-40,ctx);
	ctx.scale(2, 2);
	ctx.translate(0,x);
	ctx.font = "bold 15px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Courtesy", 0, 0);
	ctx.fillRect(0, 3, 400, 2);
	ctx.scale(0.5, 0.5);
	smileyFace(200,-40,ctx);
	smileyFace(240,-40,ctx);
	smileyFace(280,-40,ctx);
	smileyFace(320,-40,ctx);
	smileyFace(360,-40,ctx);
	smileyFace(400,-40,ctx);
	ctx.scale(2, 2);
	ctx.translate(0,x);
	ctx.font = "bold 15px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Enthusiasm", 0, 0);
	ctx.fillRect(0, 3, 400, 2);
	ctx.scale(0.5, 0.5);
	smileyFace(200,-40,ctx);
	smileyFace(240,-40,ctx);
	smileyFace(280,-40,ctx);
	smileyFace(320,-40,ctx);
	smileyFace(360,-40,ctx);
	smileyFace(400,-40,ctx);
	smileyFace(440,-40,ctx);
	smileyFace(480,-40,ctx);
	smileyFace(520,-40,ctx);
	ctx.scale(2, 2);
	ctx.translate(0,x);
	ctx.font = "bold 15px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Honesty", 0, 0);
	ctx.fillRect(0, 3, 400, 2);
	ctx.scale(0.5, 0.5);
	smileyFace(200,-40,ctx);
	smileyFace(240,-40,ctx);
	smileyFace(280,-40,ctx);
	smileyFace(320,-40,ctx);
	smileyFace(360,-40,ctx);
	smileyFace(400,-40,ctx);
	smileyFace(440,-40,ctx);
	smileyFace(480,-40,ctx);
	smileyFace(520,-40,ctx);
	ctx.scale(2, 2);
	ctx.translate(0,x);
	ctx.font = "bold 15px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Humorous", 0, 0);
	ctx.fillRect(0, 3, 400, 2);
	ctx.scale(0.5, 0.5);
	smileyFace(200,-40,ctx);
	smileyFace(240,-40,ctx);
	smileyFace(280,-40,ctx);
	smileyFace(320,-40,ctx);
	smileyFace(360,-40,ctx);
	smileyFace(400,-40,ctx);
	ctx.scale(2, 2);
	ctx.translate(0,x);
	ctx.font = "bold 15px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Patience", 0, 0);
	ctx.fillRect(0, 3, 400, 2);
	ctx.scale(0.5, 0.5);
	smileyFace(200,-40,ctx);
	smileyFace(240,-40,ctx);
	smileyFace(280,-40,ctx);
	smileyFace(320,-40,ctx);
	smileyFace(360,-40,ctx);
	smileyFace(400,-40,ctx);
	smileyFace(440,-40,ctx);
	smileyFace(480,-40,ctx);
	smileyFace(520,-40,ctx);
	smileyFace(560,-40,ctx);
	smileyFace(600,-40,ctx);
	ctx.scale(2, 2);
	ctx.translate(0,x);
	ctx.font = "bold 15px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Respectability", 0, 0);
	ctx.fillRect(0, 3, 400, 2);
	ctx.scale(0.5, 0.5);
	smileyFace(200,-40,ctx);
	smileyFace(240,-40,ctx);
	smileyFace(280,-40,ctx);
	smileyFace(320,-40,ctx);
	smileyFace(360,-40,ctx);
	smileyFace(400,-40,ctx);
	smileyFace(440,-40,ctx);
	smileyFace(480,-40,ctx);
	smileyFace(520,-40,ctx);
	ctx.scale(2, 2);
	ctx.translate(0,x);
	ctx.font = "bold 15px serif";
	ctx.fillStyle = "black";
	ctx.textAlign = "left";
	ctx.fillText("Respectfulness", 0, 0);
	ctx.fillRect(0, 3, 400, 2);
	ctx.scale(0.5, 0.5);
	smileyFace(200,-40,ctx);
	smileyFace(240,-40,ctx);
	smileyFace(280,-40,ctx);
	smileyFace(320,-40,ctx);
	smileyFace(360,-40,ctx);
	smileyFace(400,-40,ctx);
	smileyFace(440,-40,ctx);
	ctx.scale(2, 2);
	ctx.setTransform(1, 0, 0, 1, 0, 0);		
}




function smileyFace(x,y,ctx){
	ctx.beginPath();
	//arc(x,y,r,sAngle,eAngle,counterclockwise);
	ctx.fillStyle = "yellow";
	ctx.ellipse(25+x, 25+y, 20, 20, 0, 0, Math.PI * 2, true);
	ctx.fill();
	ctx.fillStyle = "black";
	ctx.arc(25+x, 25+y, 20, 0, Math.PI * 2, true); // Outer circle*/
	ctx.moveTo(35+x, 25+y);
	ctx.arc(25+x, 25+y, 12, 0, Math.PI, false); // Mouth (clockwise)
	ctx.moveTo(20+x, 20+y);
	ctx.arc(20+x, 20+y, 3, 0, Math.PI * 2, true); // Left eye
	ctx.moveTo(31+x, 20+y);
	ctx.arc(31+x, 20+y, 3, 0, Math.PI * 2, true); // Right eye
	ctx.stroke();
}

	




