SELECT genero, count(genero) as qtde
FROM Movimento inner join Usuario on Movimento.idUsuarios = Usuario.idUsuario
where dataHora between '2019-08-01 06:00' and '2019-09-30 22:00' and idTipoMovimento = "1"
group by genero;