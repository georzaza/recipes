#!/bin/bash

sudo mysqldump --skip-triggers --compact --no-create-info -p store > temp_exported_data.sql
rm exported_data.sql
seq="4 2 3 0 1"
for i in $seq
do
  awk -v l="$i" 'NR==l+1' temp_exported_data.sql >> exported_data.sql
done
rm temp_exported_data.sql
