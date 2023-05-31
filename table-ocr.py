import tabula

pdf_path = "KWIR000737710.pdf"

dfs = tabula.read_pdf(pdf_path,pages="2",lattice=False)

for i in range(len(dfs)):
    dfs[i].to_json("all_pages_table(i).json")
