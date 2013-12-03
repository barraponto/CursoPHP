#!/usr/bin/env python3
# encoding: utf-8

from lxml import etree
from lxml.html import parse

# Leia o arquivo.html
tree = parse('10.html')
root = tree.getroot()

# Prepare uma tabela
table = etree.SubElement(root.cssselect('body')[0], 'table')
thead = etree.SubElement(table, 'thead')
tbody = etree.SubElement(table, 'tbody')

# Adicione cabeçalhos na tabela
for header_text in [None, None, None, 'Lettering', 'Material']:
    header = etree.SubElement(thead, 'th')
    header.text = header_text

# Capture o título na tabela
thead[0].text = root.cssselect('h1')[0].text_content()

for unit in root.cssselect('section.level2'):
    for piece in unit.cssselect('section.level3'):
        row = etree.SubElement(tbody, 'tr')
        uheader = etree.SubElement(row, 'td')
        # Coloque o título desta unidade uma vez
        if unit.find('h2') is not None:
            uheader.text = unit.find('h2').text_content()
            unit.remove(unit.find('h2'))
        # Coloque o título desta parte
        pheader = etree.SubElement(row, 'td')
        pheader.text = piece.find('h3').text_content()
        piece.remove(piece.find('h3'))
        # Começamos pelos materiais (snippets)
        material = etree.Element('td')
        for snippet in piece.cssselect('pre'):
            material.append(snippet)
        # Agora vamos pros letterings
        lettering = etree.Element('td')
        for letter in piece.cssselect('em, code'):
            l = etree.SubElement(lettering, 'p')
            l.text = letter.text
        # Finalmente, o corpo do texto
        script = etree.SubElement(row, 'td')
        for e in piece.getchildren():
            script.append(e)
        # Completando a linha
        row.append(lettering)
        row.append(material)

print(etree.tostring(tree, encoding='utf-8', method='html', pretty_print=True).decode('utf-8'))
