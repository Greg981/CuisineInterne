class BankAccount {
   constructor(owner, balance) {
       this.owner = owner;
       this.balance = balance;
   }

 showBalance () {
console.log( 'Votre solde est de :' + this.balance + 'Eur')

}
deposit(amount) {
   console.log('Vous avez déposé :' + amount + 'Eur' );
   this.balance += amount;
   this.showBalance();
}
withdraw(amount) {
if (amount > this.balance){
   console.log ('Solde insufisant pour effectuer le retrait !');
}
else {
   console.log ('Votre retrait de : ' + amount +'Eur à bien été effectué');
   this.balance -= amount;
   this.showBalance();
} 

}
 }


const newAccount = new BankAccount (
   'Greg G',
   500
);
newAccount.showBalance();
newAccount.deposit(150);
newAccount.withdraw(130);
newAccount.withdraw(700);