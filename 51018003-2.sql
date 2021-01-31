-- siapa saja tamu orang United State yang menginap pada bulan Oktober?
SELECT guests.member_ID, guests.date_in, members.nama, members.negara, country.Country
FROM guests
INNER JOIN members USING(members_ID)
INNER JOIN country ON members.negara = country.CC
WHERE (country.CC='US') and (MONTH(date_in) = 10);

-- berapa kali dan kapan Laura Callahan bertamu di hotel ini?
SELECT guests.member_ID,guests.date_in, members.nama
FROM guests
INNER JOIN members USING (member_ID)
WHERE (members.nama LIKE'%Callahan');

-- kapan dan siapa saja tamu yang tinggal di kamar type A (Standar) pada bulan Oktober?
SELECT guests.date_in, members.nama, guests.room, rooms.rtype
FROM guests
INNER JOIN members USING (member_ID)
INNER JOIN rooms ON guests.room =rooms.room
WHERE rooms.rtype='A' and (MONTH(date_in) = 10);

-- siapa saja dan berapa kali kamar nomor 1501 ditinggal selama bulan november?
SELECT guests.date_in, members.nama, guests.room, rooms.rtype
FROM guests
INNER JOIN members USING (member_ID)
INNER JOIN rooms ON guests.room =rooms.room
WHERE rooms.room='1501' and (MONTH(date_in) = 11);

-- berapa banyak dan apa nomor kamar Suite yang memiliki ocean view?
SELECT rooms.room, roomtype.rtype, views.dview
FROM roomtype
INNER JOIN rooms ON rooms.rtype = roomtype.kode
INNER JOIN views ON rooms.dview = views.vcode
WHERE rooms.dview = 'o' AND roomtype.rtype = 'Suite';

-- selama bulan april, kamar apa aja yang ditinggali tamu?
SELECT guests.room, guests.date_in, members.nama
FROM guests
INNER JOIN members USING (member_ID)
WHERE (MONTH(date_in) = 4);

-- berapa banyak, kapan, dan siapa saja orang Indonesia yang pernah tinggal dikamar Presidential Suite?
SELECT guests.date_in, members.nama, guests.room, roomtype.rtype , country.Country
FROM guests
INNER JOIN members USING (member_ID)
INNER JOIN rooms ON guests.room =rooms.room
INNER JOIN roomtype ON rooms.rtype = roomtype.kode
INNER JOIN country ON members.negara = country.CC
WHERE rooms.rtype='E' AND country.CC='ID';

-- siapa saja dan dari negara mana tamu yang menempati kamar dengan city view pada bulan agustus?
SELECT members.nama, guests.room,guests.date_in, views.dview, country.Country
FROM guests
INNER JOIN members USING (member_ID)
INNER JOIN rooms ON rooms.room = guests.room
INNER JOIN country ON members.negara = country.CC
INNER JOIN views ON rooms.dview = views.vcode
WHERE views.vcode = 'C' and (MONTH(date_in) = 8);


-- siapa saja dan kapan orang Indonesia tinggal di kamar dengan Ocean View selama bulan mei?
SELECT members.nama, guests.room,guests.date_in, views.dview, country.Country
FROM guests
INNER JOIN members USING (member_ID)
INNER JOIN rooms ON rooms.room = guests.room
INNER JOIN country ON members.negara = country.CC
INNER JOIN views ON rooms.dview = views.vcode
WHERE views.vcode = 'O' and (MONTH(date_in) = 5) and country.CC='ID';

-- siapa saja dan kapan tamu yang check-in pada bulan 5 dan baru check-out pada bulan juni?
SELECT members.nama, guests.date_in ,guests.date_out
FROM guests
INNER JOIN members USING (member_ID)
WHERE (MONTH(date_in) = 5) and (MONTH(date_out) = 6);
