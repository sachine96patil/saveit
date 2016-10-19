# Write a program in Python/C++ to test that computer is booted with
# Legacy Boot ROM BIOS or UEFI.


import os

print 'UEFI detected.'if os.path.exists('/sys/firmware/efi') else 'Legacy BIOS detected.'

# Output:
# python b5.py 
#Legacy BIOS detected.

