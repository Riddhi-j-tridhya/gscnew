import sys
from pdfminer.high_level import extract_text

pdf_file_path = sys.argv[1]
pdf_text = extract_text(pdf_file_path)

print(pdf_text)
