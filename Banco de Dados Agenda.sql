create database Agenda;
use Agenda;
drop table Tarefa;
create table Tarefa(
id_tarefa int primary key,
descricao_tarefa varchar(100),
data_inico_tarefa date,
data_fim_tarefa date
);

select * from Tarefa;

insert into Tarefa (id_tarefa,descricao_tarefa,data_inico_tarefa,data_fim_tarefa) values
(1, 'Planejar o cronograma do projeto', '2025-04-01', '2025-04-02'),
(2, 'Desenvolver protótipo inicial', '2025-04-03', '2025-04-07'),
(3, 'Reunião com equipe de design', '2025-04-08', '2025-04-08'),
(4, 'Revisar requisitos com o cliente', '2025-04-09', '2025-04-10'),
(5, 'Documentar funcionalidades principais', '2025-04-11', '2025-04-13');
