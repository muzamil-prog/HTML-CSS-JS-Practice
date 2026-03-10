console.log("check the number is prime or not ");
let n=11;
for(let i=2; i<=11; i++){
    let isprime=true;
    for(let j=2; j<i; j++){
        if(i%j===0){
            isprime=false;
            break;
        }
    }
    if(isprime)
        console.log("is prime" +i)
    
    
}
