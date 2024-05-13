create database amusementPark;
use amusementPark;

create table users (
    name                  char(32)          character set utf8,
    childenterence                          int(3),
    adultenterece                           int(3),
    childBIC3                               int(3),
    adultBIC3                               int(3),
    childFreeTicket                          int(3),
    adultFreeTicket                         int(3),
    childyearFreeTicket                     int(3),
    adultyearFreeTicket                     int(3), 
    total                                   int(3)
);


describe users;