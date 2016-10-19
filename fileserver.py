import socket
import sys

s = socket.socket()

s.bind(("localhost",8000))

s.listen(10)  

while True:
    sc, address = s.accept()

    print address
    print sc
   
    f = open('file11.txt','wb') #open in binary
 
    while True:       
   
        l = sc.recv(1024)
        while (l):
                f.write(l)
		f.flush()
        	l = sc.recv(1024)
    f.close()


    sc.close()

s.close()

