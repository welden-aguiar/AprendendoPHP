Type hint é tipar a variável que em php é fracamente tipada.
é colocar o tipo antes da variável e a partir dai ela só recebe valores do tipo informado,
ou senão, apresenta erro.

EX: 
    string $str = 'Oi';
    agora ela só recebe string, logo o exemplo a seguir é errado:
    string $str = 2;