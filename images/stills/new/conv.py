import subprocess

for i in range(1, 21):
	subprocess.call("convert still0{1}.png -quality 90 -crop 1514x965+0+0 still0{1}.jpg".format(i,i), shell=True,stdout=subprocess.PIPE, stderr=subprocess.PIPE)
