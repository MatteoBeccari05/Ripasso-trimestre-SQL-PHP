create database wifi;


create table wifi.produttori (
    id_produttore int auto_increment primary key,
    nome varchar(100) not null,
    sede varchar(100),
    anno_fondazione int
);



create table wifi.modelli_access_point (
    id_modello int auto_increment primary key,
    nome_modello varchar(100) not null,
    tipo varchar(50),
    anno_uscita int,
    id_produttore int,
   	foreign key (id_produttore) references produttori(id_produttore)
);


insert into wifi.produttori (nome, sede, anno_fondazione)
values 
    ('TP-Link', 'Shenzhen, Cina', 1996),
    ('Cisco', 'San Jose, USA', 1984),
    ('Netgear', 'San Jose, USA', 1996),
    ('Ubiquiti Networks', 'New York, USA', 2005),
    ('D-Link', 'Taipei, Taiwan', 1986),
    ('Linksys', 'San Jose, USA', 1988);


insert into wifi.modelli_access_point (nome_modello, tipo, anno_uscita, id_produttore)
values 
    ('Archer C7', 'Wi-Fi 5, Dual-band', 2015, 1),
    ('Archer AX6000', 'Wi-Fi 6, Dual-band', 2019, 1),
    ('WRT3200ACM', 'Wi-Fi 5, Tri-band', 2017, 2),
    ('Nighthawk R7000', 'Wi-Fi 5, Dual-band', 2014, 3),
    ('Orbi RBK50', 'Wi-Fi 5, Tri-band', 2016, 3),
    ('UniFi AP AC Pro', 'Wi-Fi 5, Dual-band', 2015, 4),
    ('UniFi AP AC LR', 'Wi-Fi 5, Dual-band', 2017, 4),
    ('DIR-880L', 'Wi-Fi 5, Dual-band', 2014, 5),
    ('Linksys EA7500', 'Wi-Fi 5, Dual-band', 2016, 6),
    ('Linksys Velop', 'Wi-Fi 5, Tri-band', 2017, 6);
   
insert into wifi.modelli_access_point (nome_modello, tipo, anno_uscita, id_produttore)
values 
    ('Archer A7', 'Wi-Fi 5, Dual-band', 2017, 1),
    ('Archer AX11000', 'Wi-Fi 6, Tri-band', 2020, 1),
    ('Archer AX1800', 'Wi-Fi 6, Dual-band', 2021, 1),
    ('Archer C1200', 'Wi-Fi 5, Dual-band', 2016, 1),
    ('Archer C3150', 'Wi-Fi 5, Tri-band', 2017, 1),
    ('Archer C5400X', 'Wi-Fi 5, Tri-band', 2018, 1),
    ('Archer T9UH', 'Wi-Fi 5, USB Adapter', 2016, 1),
    ('Archer C5400', 'Wi-Fi 5, Tri-band', 2017, 1),
    ('WRT3200ACM', 'Wi-Fi 5, Tri-band', 2017, 2),
    ('WRT1900ACS', 'Wi-Fi 5, Dual-band', 2016, 2),
    ('WRT32X', 'Wi-Fi 5, Tri-band', 2017, 2),
    ('EA9500', 'Wi-Fi 5, Tri-band', 2017, 2),
    ('EA8300', 'Wi-Fi 5, Tri-band', 2017, 2),
    ('Nighthawk R7000', 'Wi-Fi 5, Dual-band', 2014, 3),
    ('Nighthawk R8000', 'Wi-Fi 5, Tri-band', 2014, 3),
    ('Nighthawk X6S', 'Wi-Fi 5, Tri-band', 2017, 3),
    ('Nighthawk R9000', 'Wi-Fi 5, Tri-band', 2017, 3),
    ('Orbi RBK50', 'Wi-Fi 5, Tri-band', 2016, 3),
    ('Orbi RBK852', 'Wi-Fi 6, Tri-band', 2020, 3),
    ('Orbi RBK750', 'Wi-Fi 6, Tri-band', 2020, 3),
    ('UniFi AP AC Pro', 'Wi-Fi 5, Dual-band', 2015, 4),
    ('UniFi AP AC LR', 'Wi-Fi 5, Dual-band', 2017, 4),
    ('UniFi AP HD', 'Wi-Fi 5, Dual-band', 2016, 4),
    ('UniFi AP FlexHD', 'Wi-Fi 5, Dual-band', 2019, 4),
    ('UniFi AP Lite', 'Wi-Fi 5, Single-band', 2014, 4),
    ('UniFi AP 6', 'Wi-Fi 6, Dual-band', 2021, 4),
    ('DIR-868L', 'Wi-Fi 5, Dual-band', 2015, 5),
    ('DIR-880L', 'Wi-Fi 5, Dual-band', 2014, 5),
    ('DIR-890L', 'Wi-Fi 5, Tri-band', 2016, 5),
    ('DIR-895L', 'Wi-Fi 5, Tri-band', 2017, 5),
    ('DIR-895L/R', 'Wi-Fi 5, Tri-band', 2017, 5),
    ('Linksys EA7500', 'Wi-Fi 5, Dual-band', 2016, 6),
    ('Linksys Velop', 'Wi-Fi 5, Tri-band', 2017, 6),
    ('Linksys MR8300', 'Wi-Fi 5, Tri-band', 2017, 6),
    ('Linksys EA9500', 'Wi-Fi 5, Tri-band', 2017, 6),
    ('Linksys WRT1200AC', 'Wi-Fi 5, Dual-band', 2016, 6),
    ('Linksys MX5', 'Wi-Fi 6, Tri-band', 2020, 6),
    ('Linksys MX10', 'Wi-Fi 6, Tri-band', 2020, 6);


   
   
/* =============== JOIN =============== */
select p.id_produttore, p.nome AS nome_produttore, p.sede, p.anno_fondazione, m.id_modello, m.nome_modello, m.tipo, m.anno_uscita
from wifi.produttori p
join wifi.modelli_access_point m 
on p.id_produttore = m.id_produttore;
   
   
   
   
/* =============== CRUD =============== */
   
/*Visualizzo gli access point di un produttore specifico*/
select m.id_modello, m.nome_modello, m.tipo, m.anno_uscita
from wifi.modelli_access_point m
join wifi.produttori p ON m.id_produttore = p.id_produttore
where p.nome = 'TP-Link';

/*Visualizzo l'intera tabella di produttori*/   
select * from wifi.produttori p ;

/*Visualizzo l'intera tabella di access point*/   
select * from wifi.modelli_access_point;

/*elimino un certo access point in base al nome*/
delete from wifi.modelli_access_point
where nome_modello = 'Nighthawk R7000';

/*Aggiornare un access point in base al nome*/
update wifi.modelli_access_point
set tipo = 'Wi-Fi 6, Dual-band'
where nome_modello = 'Archer C7';


/*Eliminare tutti gli access point con Wi-Fi 5*/
delete from wifi.modelli_access_point
where tipo LIKE '%Wi-Fi 5%';

 


/* =============== FUNZIONI DI AGGREGAZIONE =============== */

/*conto il numero di produttori*/
select count(*) as numero_produttori
from wifi.produttori;

/*conto il numero di prodotti*/
select count(*) as numero_prodotti
from wifi.modelli_access_point ;

/*Conta il numero di modelli di access point per ogni produttore*/
select p.nome as produttore, count() (m.id_modello) as numero_modelli
from wifi.produttori p
left join wifi.modelli_access_point m on p.id_produttore = m.id_produttore
group by p.nome;

/*Conta il numero di modelli Wi-Fi 6 disponibili*/
select count(*) as numero_modelli_wifi_6
from wifi.modelli_access_point
where tipo like '%Wi-Fi 6%';

/*Media dell'anno di fondazione dei produttori*/
select avg(anno_fondazione) as media_anno_fondazione
from wifi.produttori;

/*Anno di fondazione più recente*/
select min(anno_fondazione) as anno_fondazione_piu_recente
from wifi.produttori;

/*Selezionare i produttori che hanno più di 1 modello*/
select p.nome as produttore, count(m.id_modello) as numero_modelli
from wifi.produttori p
left join wifi.modelli_access_point m ON p.id_produttore = m.id_produttore
group by p.nome
having count(m.id_modello) >= 2;


