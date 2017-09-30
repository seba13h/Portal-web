#!/bin/python
#-*- encoding: utf-8 -*-
import re

raw_names = open('./listado_nombres.txt', 'rb')
template = "INSERT INTO student(rut, nombre, apellido, curso) VALUES('%s', '%s', '%s', '%s');\n"
queries = []
grado =["A", "B"]
completar_curso = 1
curso = 1

for line in raw_names.readlines():
    data = line.split(' ')

    id = str(curso) + grado[0]

    if completar_curso > 160:
    	id = str(curso) + grado[1]

    
    last_names = data[1] + ' ' + data[2]
    rut = re.sub(r'\-([0-9Kk]{1})\D+',r'-\1', data[-1])
    names = ' '.join(data[3:-1])

    insert = template % (rut, names, last_names, id)
    queries.append(insert)
    if curso == 8:
    	curso = 0
    curso = curso + 1
    completar_curso = completar_curso + 1

raw_names.close()
insert_file = open('./queries.sql', 'wb')
insert_file.writelines(queries)
insert_file.close()
