# pass something like "123 4567 file.css" and a table named "file".css for sizes 0x0 to 123x4567 will be made

width=$(awk '{print $1}' <<< $@)
height=$(awk '{print $2}' <<< $@)
name=$(awk '{print $3}' <<< $@)

for ((i=0;i<=$width;i++)) # does all of the css selectors for width
do
	echo -n "@media (width:"$i"px){#w{background:url('/?w="$i"')}}" >> "$name"
done

for ((i=0;i<=height;i++)) #makes all css selectors for height
do
	echo -n "@media (height:"$i"px){#h{background:url('/?h="$i"')}}" >> "$name"
done