// create a faulty calculater
// it perform wrong operation
// example
// =+-----ki gaga -
// *-------- kis gaga +
// - ------ ki gaga /
// / ----- ki gaga **

// it perform wrong operation 10% of the times ----> mean  
 let a= prompt("enter the number");
 let b= Number(prompt("enter your number pleas:"))
 let operator= prompt("enter the operater please which you want ")
 

function Caluclater(a,b,operator){
    let faulty=Math.random()<0.1;
    if(faulty){
        console.log("=== faulty calculater=====");
    }
    if(operator=="+"){
        return a-b;
    }
    if(operator=="*"){
        return a+b;
    }
    if(operator=="-"){
        return a/b;
    }
    if(operator=="/"){
        return a*b;
    }else
        // correct operation
        if(operator=="+"){
            return a+b;
        }
        if(operator=="-"){
            return a-b;
        }
        if(operator=="*"){
            return a*b;
        }
        if(operator=="/"){
            return a/b;
        }
        
}
 let result= Caluclater(5,6, "+");
 let result1= Caluclater(5,6, "-");
 let result2= Caluclater(5,6, "/");
 let result3= Caluclater(5,6, "*");

 console.log(result);
 console.log(result1);
 console.log(result2);
 console.log(result3);
