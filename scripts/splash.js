

//* SCRIPT SPLASH SCREEN TEXT
//* wouahhhh on s'amuse !!!!!!!!!!
//* des citations de pop culture ou de parole de chansons que j'aime beaucoup 

// inspiration du jeu vidéoludique minecraft qui propose le même système! 

// ! 



var splashes = ["Now with PHP!", "Life runs on code!","Final version!","try, catch!","Hello, world!","It just works!","Think different.","iMac, therefore I am","Stay hungry, stay foolish","Kernel Panic!", "The cake is a lie!", "Oh. So. Pro.","You made me hate this city","Are you still there?","Mom, get the camera!!!","Are we too young for this?","Life is strange","Less is more","Rock'n'roll!","There's more in the making","The winner takes it all","Ne me quitte pas","Elle est d'ailleurs","Welcome to the machine","Vive la République!","Une bonne note svp","Forward thinking","We were too close to the stars","Where is my mind?","Hello, friend.","Cookies offerts!","If love is the answer you're home","Harder, better, faster, stronger","omg je-","Designed by Guillaume in France","Infinite Amethyst"];
	
console.log("Splashes Script Loaded.");
const subtitle = document.getElementById("subtitle");
subtitle.innerHTML = splashes[Math.floor(Math.random()*splashes.length)];    
    

