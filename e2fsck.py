import os
print "USB Device file management operatoins."
while True :
 print "\n 1.Mount \n 2.Unmount \n 3.Write file \n 4.Read file \n5.Copy file \n 6.Exit"
 
 choice=int(raw_input('Enter the choice : '))
 if choice == 1 :
  #os.system("sudo mkdir pendrive")
  os.system("sudo mount /dev/sdb1 /mnt")
  print "USB Mounted"
 elif choice == 2 :
  os.system("sudo umount /mnt")
  print "USB Unmounted"
 elif choice == 3 :
  fd = open("/mnt/file.txt", 'w')
  fd.write("Welcome to Engineering Lucifers")
  print("File Write Succesfull")
  fd.close()
 elif choice == 4 :
  fd = open("/mnt/file.txt", 'r')
  print (fd.read())
  print("File Read Succesfull")
  fd.close()
 elif choice == 5 :
  os.system("cp /mnt/file.txt /tmp/")
  print("File copied to location '/tmp/'")
 if choice == 6 :
  os.system("e2fsck -y -v -f /dev/sda3")
  break;
