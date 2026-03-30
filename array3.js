const myHero=["ali", "muzammil husssain", "sher Muhammad"];
// another way to declare array
const myarry2=new Array(1,2,3,4,5);
console.log(myarry2)
console.log(myHero)


// method of array
// 1.. push
myarry2.push(6)// add the element at the end of array
console.log(myarry2)

// pop -> delt the element 
myarry2.pop()
console.log(myarry2)// delt the element at the end
// 3.. unshift ---> add the element at the start of the array
myarry2.unshift(10)
console.log(myarry2)
// 4.. shift---> delt the element at the first
myarry2.shift()
console.log(myarry2)

// check operation ---> include
console.log(myarry2.includes(3))
console.log(myarry2.includes(9))

// join---> ya array ko join krta ha or  string ma convert krta ha 
const newarray= myarry2.join();
console.log(newarray)
console.log(typeof newarray)

// slice method----> ya orginal array ko change nhi krta 
// ya array ka ik hesa copy krta ha or new array return krta ha
let result= myarry2.slice(1,3)
console.log(result)
console.log(myarry2)
// splice --> orginal array ko change krta ha 
// ya array add delt or change krta ha 
let show=myarry2.splice(1,3)
console.log(show)
console.log(myarry2)

