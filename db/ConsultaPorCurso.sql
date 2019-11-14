select curso, count(idMovimento) as qtde from Movimento inner join Usuario on Movimento.idUsuarios = Usuario.idUsuario
where dataHora between '2019-08-02 06:00:00' and '2019-08-02 22:00:00' and idTipoMovimento = "1"
group by curso order by qtde;