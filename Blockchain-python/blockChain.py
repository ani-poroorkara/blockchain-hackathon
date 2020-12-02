import hashlib 
import datetime


class Block:
    def __init__(self, index, timeStamp, data, previousHash):
        self.index = index
        self.timeStamp = timeStamp
        self.data = data
        self.previousHash = previousHash
        self.myHash = self.createHash(data)

    def createHash(self, value):
        str = value
        result = hashlib.md5(str.encode())  
        return(result.hexdigest()) 


class BlockChain:
    def __init__(self):
        self.chain = []
        self.chain.append(self.createGenesis())
        print("LOG: Init called")

    def createGenesis(self):
        return Block(0, datetime.datetime.now(), "Genesis Block", 0)
    
    def getLastBlock(self):
        length = len(self.chain)
        return self.chain[length-1]

    def createHash(self, value):
        str = value
        result = hashlib.md5(str.encode())  
        return(result.hexdigest())

    def validateBlock(self,newBlock): 
        print("LOG: validating Block")
        for block in self.chain:
            blockHash = self.createHash(block.data)
            if (len(self.chain)>1) and (self.chain.index(block)+1): 
                blockNext = self.chain[self.chain.index(block)+1]
                print("LOG: creating hash again")
                print("LOG: Checking")
                if (blockNext.previousHash != blockHash) and (len(self.chain != self.chain.index(block)+1)):
                    print("LOG: not valid")
                    return False
                else:
                    print("LOG: Valid")
                    return True
            elif (newBlock.previousHash != blockHash):
                    print("LOG: not valid")
                    return False
            else:
                print("LOG: Valid")
                return True

    def addBlock(self, data):
        lastBlock = self.getLastBlock()
        print("LOG: addBlock ")
        newBlock = Block(len(self.chain), datetime.datetime.now(), data, lastBlock.myHash)
        print("LOG: Created newBlock")
        valid = self.validateBlock(newBlock)
        print("LOG: Validated Block")
        if (valid):
            self.chain.append(newBlock)
            print("LOG: Block added")
        else:
            print("Validation failed. Block not created")

print("LOG: Creating BlockChain")
testChain = BlockChain()
print(testChain.chain)
testChain.addBlock("my first block")
print("LOG: Creating block 1")
print(testChain.chain)
print("LOG: Creating block 2")
testChain.addBlock("my second block")
print(testChain.chain)

print("Genesis Block")
print(testChain.chain[0].index)
print(testChain.chain[0].data)
print(testChain.chain[0].myHash)
print(testChain.chain[0].previousHash)
print(testChain.chain[0].timeStamp)

print("Block 2")
print(testChain.chain[1].index)
print(testChain.chain[1].data)
print(testChain.chain[1].myHash)
print(testChain.chain[1].previousHash)
print(testChain.chain[1].timeStamp)

print("Block 3")
print(testChain.chain[2].index)
print(testChain.chain[2].data)
print(testChain.chain[2].myHash)
print(testChain.chain[2].previousHash)
print(testChain.chain[2].timeStamp)