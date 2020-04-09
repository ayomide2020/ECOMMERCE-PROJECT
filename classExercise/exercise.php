<script>
var assories = [3000, 2000, 500, 500, 1000];
var totalPrice = 0;

for (var i=0; i < assories.length; i++){
totalPrice += assories[i];
}
var avgPrice= totalPrice /assories.length
console.log(avgPrice);
}

if(avgPrice < 500){
console.log (Cheap)
}
else if(avgPrice < 1500){
    console.log (Afforable) 
}
else if(avgPrice < 2000){
    console.log (Considerable) 
}
else if(avgPrice < 2500){
    console.log (Perfect) 
}
default





</script>