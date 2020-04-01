#!/bin/bash

# $1 user

# $2 passw

# $3 group

# $4 folder

# $5 department

#gid=$(wbinfo --group-info=$5)
#echo $gid
#gid_number=$(echo $gid | cut -d: -f3)
sudo samba-tool user create $1 $2 --home-directory $4 --description $5
sudo samba-tool group addmembers $3 $1