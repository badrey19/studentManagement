use data;

CREATE TABLE siswa (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nisn INT(15),
    nama VARCHAR(100),
    alamat VARCHAR(50),
    ttd VARCHAR(30),
    agama VARCHAR(10),
    kelas VARCHAR(20)
);