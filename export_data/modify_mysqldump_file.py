import sys
import os

def fileExists(filename):
    return os.path.exists(filename) and os.path.isfile(filename)

def main():
    if len(sys.argv)!=2:
        print("no input files")
        exit(1)
    if fileExists(sys.argv[1]):
        
        # open input
        with open(sys.argv[1], "r") as input:

            #open output
            with open(sys.argv[1]+"_out.sql", "w") as output:

                # write which database to use
                output.write("use store;\n\n\n")

                for line in input:
                    if "migrations" in line:
                        skip = input.next()
                        while 'UNLOCK' not in skip:
                            skip = input.next()
                        continue
                    # write only lines that we care about.
                    if line.startswith('LOCK'):
                        output.write(line)
                    elif line.startswith("INSERT"):
                        output.write(line)
                    elif line.startswith("UNLOCK"):
                        output.write(line+"\n\n")

if __name__=="__main__":
    main()

