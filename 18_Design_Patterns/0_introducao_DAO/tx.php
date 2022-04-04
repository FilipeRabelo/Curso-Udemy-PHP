DESIGN PATTERNS
O que é design patterns php? 
Do inglês Design Patterns, os Padrões de Projeto podem ser definidos como modelos de soluções para algum problema específico encontrado frequentemente dentro de um projeto de software. Com eles, conseguimos desenvolver sistemas mais modulares, expansíveis, reutilizáveis e com mais flexibilidade. Podemos utilizar varios padrões em varios projetos.
O QUE É DAO?
DAO = Data Access Object;
Padrão de codigo utilizado para persistência de dados. 
Utilizada apenas em abordagens orientada a objetos (CLASSES); separamos em camadas.
Há uma classe DAO que sera responsável pelas interações do DB; banco de dados.
Atua como um intermediário de aplicação e banco de dados.
Separa a regra de negócio da interação com o banco de dados;
Possibilita também a troca de bancos ou modelo de conexão facilmente.
DAO NA TEORIA
Trabalharemos com 2 classes:
•	1 classe representa o objeto: Ex, Carro, Usuário, Avião, Carrinho etc... 
•	1 classe modelo (MODAL)  

	UserDAO: Ela faz a interação com o banco de dados (CRUD);
(CREAT, READ, UPDATE, DELETE)
(INSERIR, LER, ATUALIZAR e EXCLUIR).
Se tiver QUERY vai estar no DAO.
	User: Todas as ações que não envolvam o banco de dados;

CREATE: USER monta um novo usuário com seus campos necessários do banco, UserDAO recebe este objeto e insere o usuário no banco.
INTERFACE DO DAO
Normalmente também é criada uma interface para o DAO, Esta interface molda a classe DAO, definindo seus métodos, desta maneira temos um esqueleto para seguir e implementar na classe que vai manipular o banco de dados, os métodos principais da interface são pelo menos os que constituem o CRUD (inserir, ler, atualizar e deletar), A interface poder ser re-implemantada em diversos bancos por exemplo. 
