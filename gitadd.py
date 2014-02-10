import os
fp = open('listoffiles', 'r')
line = fp.readline()
 
while line:
  cmd = "git add "+ line
  print cmd
  os.system(cmd)
  line = fp.readline()
#end loop
fp.close()

