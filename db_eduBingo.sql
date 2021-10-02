/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     02/10/2021 10:54:29                          */
/*==============================================================*/


drop table if exists TBL_BINGO_CARD;

drop table if exists TBL_GAME;

drop table if exists TBL_GAME_TEMP;

drop table if exists TBL_INSTANSI_PENDIDIKAN;

drop table if exists TBL_KELAS;

drop table if exists TBL_LOGIN;

drop table if exists TBL_MAHASISWA;

drop table if exists TBL_MAPEL;

drop table if exists TBL_MATKUL;

drop table if exists TBL_PILGAN_SOAL;

drop table if exists TBL_PLAYER;

drop table if exists TBL_SEMESTER;

drop table if exists TBL_SISWA;

drop table if exists TBL_SOAL;

drop table if exists TBL_SOAL_MAPEL;

drop table if exists TBL_SOAL_MATKUL;

drop table if exists TBL_STATUS_INSTANSI;

drop table if exists TBL_STATUS_USER;

drop table if exists TBL_TEMP_BINGO_CARD;

drop table if exists TBL_USER;

drop table if exists TBL_USER_DETAILS;

/*==============================================================*/
/* Table: TBL_BINGO_CARD                                        */
/*==============================================================*/
create table TBL_BINGO_CARD
(
   ID_BINGO_CARD        int not null,
   primary key (ID_BINGO_CARD)
);

/*==============================================================*/
/* Table: TBL_GAME                                              */
/*==============================================================*/
create table TBL_GAME
(
   ID_GAME              int not null,
   PEMENANG_GAME        varchar(10),
   primary key (ID_GAME)
);

/*==============================================================*/
/* Table: TBL_GAME_TEMP                                         */
/*==============================================================*/
create table TBL_GAME_TEMP
(
   ID_GAME_TEMP         int not null,
   ID_GAME              int,
   ID_BINGO_CARD        int,
   ID_PLAYER            int,
   primary key (ID_GAME_TEMP)
);

/*==============================================================*/
/* Table: TBL_INSTANSI_PENDIDIKAN                               */
/*==============================================================*/
create table TBL_INSTANSI_PENDIDIKAN
(
   ID_INSTANSI_PENDIDIKAN int not null,
   ID_STATUS_INSTANSI   int,
   NAMA_INSTANSI_PENDIDIKAN varchar(50),
   ALAMAT_INSTANSI_PENDIDIKAN varchar(255),
   primary key (ID_INSTANSI_PENDIDIKAN)
);

/*==============================================================*/
/* Table: TBL_KELAS                                             */
/*==============================================================*/
create table TBL_KELAS
(
   ID_KELAS             int not null,
   TEKS_KELAS           varchar(20),
   KETERANGAN_KELAS     varchar(50),
   primary key (ID_KELAS)
);

/*==============================================================*/
/* Table: TBL_LOGIN                                             */
/*==============================================================*/
create table TBL_LOGIN
(
   ID_TBL_LOGIN         int not null auto_increment,
   USERNAME_LOGIN       varchar(8),
   PASSWORD_LOGIN       varchar(255),
   LAST_LOGIN           timestamp,
   primary key (ID_TBL_LOGIN)
);

/*==============================================================*/
/* Table: TBL_MAHASISWA                                         */
/*==============================================================*/
create table TBL_MAHASISWA
(
   ID_USER              int not null,
   ID_USER_DETAILS      int not null,
   ID_TBL_LOGIN         int not null,
   ID_INSTANSI_PENDIDIKAN int not null,
   ID_TBL_SEMESTER      int,
   ID_MAHASISWA         int not null,
   primary key (ID_USER, ID_MAHASISWA)
);

/*==============================================================*/
/* Table: TBL_MAPEL                                             */
/*==============================================================*/
create table TBL_MAPEL
(
   ID_MAPEL             int not null,
   ID_KELAS             int,
   TEKS_MAPEL           varchar(20),
   KETERANGAN_MAPEL     varchar(50),
   primary key (ID_MAPEL)
);

/*==============================================================*/
/* Table: TBL_MATKUL                                            */
/*==============================================================*/
create table TBL_MATKUL
(
   ID_MATKUL            int not null,
   ID_TBL_SEMESTER      int,
   TEKS_MATKUL          varchar(20),
   KETERANGAN_MATKUL    varchar(50),
   primary key (ID_MATKUL)
);

/*==============================================================*/
/* Table: TBL_PILGAN_SOAL                                       */
/*==============================================================*/
create table TBL_PILGAN_SOAL
(
   ID_PILGAN_SOAL       int not null,
   ID_SOAL              int,
   TEKS_PILGAN          longtext,
   IS_KEY               int,
   primary key (ID_PILGAN_SOAL)
);

/*==============================================================*/
/* Table: TBL_PLAYER                                            */
/*==============================================================*/
create table TBL_PLAYER
(
   ID_PLAYER            int not null,
   ID_MAHASISWA         int,
   TBL_ID_MAHASISWA     int,
   ID_USER              int,
   primary key (ID_PLAYER)
);

/*==============================================================*/
/* Table: TBL_SEMESTER                                          */
/*==============================================================*/
create table TBL_SEMESTER
(
   ID_TBL_SEMESTER      int not null,
   TEKS_SEMESTER        varchar(10),
   KETERANGAN_SEMESTER  varchar(50),
   primary key (ID_TBL_SEMESTER)
);

/*==============================================================*/
/* Table: TBL_SISWA                                             */
/*==============================================================*/
create table TBL_SISWA
(
   ID_USER              int not null,
   ID_USER_DETAILS      int not null,
   ID_TBL_LOGIN         int not null,
   ID_INSTANSI_PENDIDIKAN int not null,
   ID_SISWA             int not null,
   ID_KELAS             int,
   primary key (ID_USER, ID_SISWA)
);

/*==============================================================*/
/* Table: TBL_SOAL                                              */
/*==============================================================*/
create table TBL_SOAL
(
   ID_SOAL              int not null,
   ID_SOAL_MAPEL        int,
   ID_SOAL_MATKUL       int,
   TEXT_SOAL            longtext,
   primary key (ID_SOAL)
);

/*==============================================================*/
/* Table: TBL_SOAL_MAPEL                                        */
/*==============================================================*/
create table TBL_SOAL_MAPEL
(
   ID_SOAL_MAPEL        int not null,
   ID_MAPEL             int,
   primary key (ID_SOAL_MAPEL)
);

/*==============================================================*/
/* Table: TBL_SOAL_MATKUL                                       */
/*==============================================================*/
create table TBL_SOAL_MATKUL
(
   ID_SOAL_MATKUL       int not null,
   ID_MATKUL            int,
   primary key (ID_SOAL_MATKUL)
);

/*==============================================================*/
/* Table: TBL_STATUS_INSTANSI                                   */
/*==============================================================*/
create table TBL_STATUS_INSTANSI
(
   ID_STATUS_INSTANSI   int not null,
   TEKS_STATUS_INSTANSI varchar(20),
   KETERANGAN_STATUS_INSTANSI varchar(255),
   primary key (ID_STATUS_INSTANSI)
);

/*==============================================================*/
/* Table: TBL_STATUS_USER                                       */
/*==============================================================*/
create table TBL_STATUS_USER
(
   ID_STATUS_USER       int not null,
   TEKS_STATUS_USER     varchar(50),
   KETRANGAN__STATUS_USER varchar(255),
   primary key (ID_STATUS_USER)
);

/*==============================================================*/
/* Table: TBL_TEMP_BINGO_CARD                                   */
/*==============================================================*/
create table TBL_TEMP_BINGO_CARD
(
   ID_TEMP_BINGO_CARD   int not null,
   ID_BINGO_CARD        int,
   ID_SOAL              int,
   IS_TRUE_             int,
   primary key (ID_TEMP_BINGO_CARD)
);

/*==============================================================*/
/* Table: TBL_USER                                              */
/*==============================================================*/
create table TBL_USER
(
   ID_USER              int not null,
   ID_USER_DETAILS      int,
   ID_TBL_LOGIN         int,
   ID_INSTANSI_PENDIDIKAN int,
   primary key (ID_USER)
);

/*==============================================================*/
/* Table: TBL_USER_DETAILS                                      */
/*==============================================================*/
create table TBL_USER_DETAILS
(
   ID_USER_DETAILS      int not null,
   ID_STATUS_USER       int,
   NAMA_USER            varchar(30),
   ALAMAT_USER          varchar(255),
   JK_USER              int,
   TELP_USER            varchar(13),
   EMAIL_USER           varchar(50),
   primary key (ID_USER_DETAILS)
);

alter table TBL_GAME_TEMP add constraint FK_ASSIGN_CARD_TO_GAME foreign key (ID_BINGO_CARD)
      references TBL_BINGO_CARD (ID_BINGO_CARD) on delete restrict on update restrict;

alter table TBL_GAME_TEMP add constraint FK_ASSIGN_GAME_DATA foreign key (ID_GAME)
      references TBL_GAME (ID_GAME) on delete restrict on update restrict;

alter table TBL_GAME_TEMP add constraint FK_ASSIGN_PLAYER_TO_GAME foreign key (ID_PLAYER)
      references TBL_PLAYER (ID_PLAYER) on delete restrict on update restrict;

alter table TBL_INSTANSI_PENDIDIKAN add constraint FK_STATUS_INSTANSI foreign key (ID_STATUS_INSTANSI)
      references TBL_STATUS_INSTANSI (ID_STATUS_INSTANSI) on delete restrict on update restrict;

alter table TBL_MAHASISWA add constraint FK_INHERITANCE_USER foreign key (ID_USER)
      references TBL_USER (ID_USER) on delete restrict on update restrict;

alter table TBL_MAHASISWA add constraint FK_SEMESTER_MAHASISWA foreign key (ID_TBL_SEMESTER)
      references TBL_SEMESTER (ID_TBL_SEMESTER) on delete restrict on update restrict;

alter table TBL_MAPEL add constraint FK_MAPEL_KELAS foreign key (ID_KELAS)
      references TBL_KELAS (ID_KELAS) on delete restrict on update restrict;

alter table TBL_MATKUL add constraint FK_SEMESTER_MATKUL foreign key (ID_TBL_SEMESTER)
      references TBL_SEMESTER (ID_TBL_SEMESTER) on delete restrict on update restrict;

alter table TBL_PILGAN_SOAL add constraint FK_PILGAN_SOAL foreign key (ID_SOAL)
      references TBL_SOAL (ID_SOAL) on delete restrict on update restrict;

alter table TBL_PLAYER add constraint FK_ASSIGN_USER_TO_PLAYER foreign key (ID_USER)
      references TBL_USER (ID_USER) on delete restrict on update restrict;

alter table TBL_SISWA add constraint FK_INHERITANCE_USER2 foreign key (ID_USER)
      references TBL_USER (ID_USER) on delete restrict on update restrict;

alter table TBL_SISWA add constraint FK_KELAS_SISWA foreign key (ID_KELAS)
      references TBL_KELAS (ID_KELAS) on delete restrict on update restrict;

alter table TBL_SOAL add constraint FK_SOAL_MAPEL foreign key (ID_SOAL_MAPEL)
      references TBL_SOAL_MAPEL (ID_SOAL_MAPEL) on delete restrict on update restrict;

alter table TBL_SOAL add constraint FK_SOAL_MATKUL foreign key (ID_SOAL_MATKUL)
      references TBL_SOAL_MATKUL (ID_SOAL_MATKUL) on delete restrict on update restrict;

alter table TBL_SOAL_MAPEL add constraint FK_MAPEL_SOAL foreign key (ID_MAPEL)
      references TBL_MAPEL (ID_MAPEL) on delete restrict on update restrict;

alter table TBL_SOAL_MATKUL add constraint FK_MATKUL_SOAL foreign key (ID_MATKUL)
      references TBL_MATKUL (ID_MATKUL) on delete restrict on update restrict;

alter table TBL_TEMP_BINGO_CARD add constraint FK_ASSIGN_SOAL_TO_CARD foreign key (ID_SOAL)
      references TBL_SOAL (ID_SOAL) on delete restrict on update restrict;

alter table TBL_TEMP_BINGO_CARD add constraint FK_KARTU_SOAL foreign key (ID_BINGO_CARD)
      references TBL_BINGO_CARD (ID_BINGO_CARD) on delete restrict on update restrict;

alter table TBL_USER add constraint FK_INSTANSI_DETAIL foreign key (ID_INSTANSI_PENDIDIKAN)
      references TBL_INSTANSI_PENDIDIKAN (ID_INSTANSI_PENDIDIKAN) on delete restrict on update restrict;

alter table TBL_USER add constraint FK_LOGIN_DETAIL foreign key (ID_TBL_LOGIN)
      references TBL_LOGIN (ID_TBL_LOGIN) on delete restrict on update restrict;

alter table TBL_USER add constraint FK_USER_DETAIL foreign key (ID_USER_DETAILS)
      references TBL_USER_DETAILS (ID_USER_DETAILS) on delete restrict on update restrict;

alter table TBL_USER_DETAILS add constraint FK_STATUS_USER foreign key (ID_STATUS_USER)
      references TBL_STATUS_USER (ID_STATUS_USER) on delete restrict on update restrict;

