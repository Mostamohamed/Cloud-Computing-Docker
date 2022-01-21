def Cleaning_txt(string):
    Punctuation = '''!()-[]{};:’'"\;/, <>./?@,#$.%^”— “,‘&*_~'''
    for sign in string:  
        if sign in Punctuation:  
            string = string.replace(sign, " ") 
    return string

try:
    with open('Jane Austin’s Pride and Prejudice.txt','r',encoding="utf-8") as file1:
        data = file1.read()
    with open('Jane Austin’s Pride and Prejudice.txt',"w+",encoding="utf-8") as file1:
        file1.write(Cleaning_txt(data))
    print("Finished", 'Jane Austin’s Pride and Prejudice.txt')
except FileNotFoundError:
    print("File not found")
    
try:
    with open('HP Lovecraft’s Beyond the Wall of Sleep.txt','r',encoding="utf-8") as file2:
        data = file2.read()
    with open('HP Lovecraft’s Beyond the Wall of Sleep.txt',"w+",encoding="utf-8") as file2:
        file2.write(Cleaning_txt(data))
    print("Finished", 'HP Lovecraft’s Beyond the Wall of Sleep.txt')
except FileNotFoundError:
    print("File not found")
    
book1 = open('HP Lovecraft’s Beyond the Wall of Sleep.txt', 'rt',encoding="utf8").readlines()
book2 = open('Jane Austin’s Pride and Prejudice.txt', 'rt',encoding="utf8").readlines()    

if len(book1) != 0 | len(book2) != 0:
    list1 = set(word1 for line in book1 for word1 in line.strip('\n\t').split(' '))
    list2 = set(word2 for lines in book2 for word2 in lines.strip('\n\t').split(' '))
    for word1 in list1:
        for word2 in list2:
            if word1 == word2:
                print (word1)