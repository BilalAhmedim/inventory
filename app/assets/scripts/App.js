class newclass{
  constructor(name){
    this.name = name;
  }
  greet(){
    console.log( this.name + " World!" );
  }
}

var person = new newclass();
person.greet("Hello ");